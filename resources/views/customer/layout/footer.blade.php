<div class="nk-footer">
    <div class="container-fluid">
        <div class="nk-footer-wrap">
            <div class="nk-footer-copyright"> &copy; 2022 DashLite. Template by <a
                    href="https://softnio.com" target="_blank">Softnio</a>
            </div>
            <div class="nk-footer-links">
                <ul class="nav nav-sm">
                    <li class="nav-item dropup">
                        <a href=""
                            class="dropdown-toggle dropdown-indicator has-indicator nav-link text-base"
                            data-bs-toggle="dropdown" data-offset="0,10"><span>{{ lang(app()->getLocale()) }}</span></a>
                        <div class="dropdown-menu dropdown-menu-sm dropdown-menu-end">
                            <ul class="language-list">
                                @foreach ($lang as $l)
                                <li>
                                    <a href="{{ route('changeLang', $l->lang_code) }}" class="language-item">
                                        <span class="language-name text-capitalize">{{ $l->language_name }}</span>
                                    </a>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
