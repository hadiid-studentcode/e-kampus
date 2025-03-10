@extends('layouts.app')

@push('css')
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
@endpush

@section('content')
    <div class="page-content container-fluid" x-data="alphineData">
        <!-- Breadcrumb -->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-4">
            <div class="breadcrumb-title pe-3">Diskusi Kelas</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Forum Diskusi</li>
                    </ol>
                </nav>
            </div>
        </div>

        <!-- Tabs Navigation -->


        @include('components.alert')

        <div class="row">
            <div class="col-12">
                <!-- New Discussion Form -->
                <div class="card border-0 shadow-sm mb-4">
                    <div class="card-body p-4">
                        @include('pages.classes.partials.tabs')
                        <hr>
                        <h5 class="card-title d-flex align-items-center gap-2 mb-3">
                            <i class="bx bx-conversation"></i>
                            Mulai Diskusi Baru
                        </h5>
                        <form @submit.prevent="handleSubmit()">

                            <div class="mb-3">
                                <label class="form-label">Pesan</label>
                                <textarea name="content" class="form-control" rows="3" x-model="form.content"
                                    placeholder="Tulis pesan diskusi..."></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">
                                <i class="bx bx-plus-circle me-1"></i>
                                Mulai Diskusi
                            </button>
                        </form>

                    </div>
                </div>

                <!-- Discussion List -->
                <div class="discussions-list">
                    <template x-if="!discussions.length">
                        <div class="text-center py-4">
                            <p class="text-muted">Belum ada diskusi</p>
                        </div>
                    </template>

                    <template x-for="discussion in discussions" :key="discussion.id">
                        <div class="card border-0 shadow-sm mb-4">
                            <div class="card-body p-4">
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <span class="badge bg-primary" x-text="discussion.replies_count + ' balasan'"></span>
                                </div>

                                <!-- Main Discussion -->
                                <div class="discussion-content mb-4">
                                    <p class="card-text" x-text="discussion.content"></p>
                                    <div class="d-flex align-items-center text-muted small">
                                        <img :src="'https://ui-avatars.com/api/?name=' + discussion.user.name +
                                            '&background=random'"
                                            class="rounded-circle me-2" width="32" height="32"
                                            :alt="discussion.user.name">
                                        <span x-text="discussion.user.name + ' • ' + discussion.created_at"></span>
                                    </div>
                                </div>

                                <!-- Replies Section -->
                                <div class="replies-section">
                                    <template x-for="reply in discussion.replies" :key="reply.id">
                                        <div class="ms-4 mb-3">
                                            <div class="d-flex gap-2">
                                                <img :src="'https://ui-avatars.com/api/?name=' + reply.user.name +
                                                    '&background=random'"
                                                    class="rounded-circle" width="32" height="32"
                                                    :alt="reply.user.name">
                                                <div class="flex-grow-1">
                                                    <div class="bg-light p-3 rounded">
                                                        <div class="d-flex justify-content-between align-items-center mb-2">
                                                            <span class="fw-bold" x-text="reply.user.name"></span>
                                                            <small class="text-muted" x-text="reply.created_at"></small>
                                                        </div>
                                                        <p class="mb-0" x-text="reply.content"></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </template>
                                </div>

                                <!-- Reply Form -->
                                <div class="mt-3">
                                    <form @submit.prevent="handleReply(discussion.id)" class="d-flex gap-2">
                                        <div class="flex-grow-1">
                                            <input type="text" x-model="replyForm.forms[discussion.id]"
                                                class="form-control" placeholder="Tulis balasan...">
                                        </div>
                                        <button class="btn btn-primary" type="submit">
                                            <i class="bx bx-send me-1"></i>
                                            Balas
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </template>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script>
        document.addEventListener('alpine:init', () => {
            Alpine.data('alphineData', () => ({
                discussions: [],
                form: {
                    course_id: @json($course_id),
                    content: ''

                },
                token: @json($token),

                init() {
                    this.getData(this.token);
                },

                async handleSubmit(token) {
                    try {

                        let response = await axios.post('{{ route('discussions.store') }}', this
                            .form, {
                                headers: {
                                    'Authorization': `Bearer ${this.token}`,
                                    'Content-Type': 'application/json'
                                }
                            }).then(response => {
                            console.log(response);
                            this.resetFrom();
                        }).catch(error => {
                            console.log(error);
                        })

                        this.getData(this.token);

                    } catch (error) {
                        console.log(errror);
                    }
                },
                resetFrom() {
                    this.form = {
                        content: ''
                    };
                },

                async getData(token) {
                    if (!token) {
                        console.error('Token tidak ditemukan!');
                        return;
                    }

                    try {
                        let response = await axios.post(
                            `{{ route('discussions.getDataDiscussions') }}`, {
                                course_id: @json($course_id)
                            }, {
                                headers: {
                                    'Authorization': `Bearer ${token}`,
                                    'Accept': 'application/json'
                                }
                            }
                        );
                        this.discussions = response.data;
                    } catch (error) {
                        console.error('Error fetching discussions:', error);
                    }
                },

                replyForm: {
                    forms: {} // Will store content for each discussion
                },

                async handleReply(discussionId) {
                    try {
                        await axios.post(`{{ url('api/discussions') }}/${discussionId}/replies`, {
                            content: this.replyForm.forms[discussionId],
                            discussion_id: discussionId
                        }, {
                            headers: {
                                'Authorization': `Bearer ${this.token}`,
                                'Content-Type': 'application/json'
                            }
                        });

                        // Clear only the specific discussion's reply form
                        this.replyForm.forms[discussionId] = '';
                        this.getData(this.token);
                    } catch (error) {
                        console.error('Error sending reply:', error);
                    }
                }

            }))
        })
    </script>
@endpush
