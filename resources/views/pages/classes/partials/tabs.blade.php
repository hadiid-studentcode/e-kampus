   <div class="nav-wrapper position-relative mb-4">
                    <ul class="nav nav-pills nav-fill flex-column flex-md-row gap-2 gap-md-0">
                        <li class="nav-item">
                            <a class="nav-link mb-2 mb-md-0 {{ Route::is('classes.show') ? 'active' : '' }}" href="{{ route('classes.show', $course->id) }}">Materi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mb-2 mb-md-0 {{ Route::is('classes.assignments.index') ? 'active' : '' }}"
                                href="{{ route('classes.assignments.index', $course->id) }}">Tugas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mb-2 mb-md-0 {{ Route::is('discussions.show') ? 'active' : '' }}" href="{{ route('discussions.show', $course->id) }}">Forum Diskusi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mb-2 mb-md-0 {{ Route::is('classes.statistics') ? 'active' : '' }}" href="#statistics" data-bs-toggle="tab">Statistik</a>
                        </li>
                    </ul>
                </div>
