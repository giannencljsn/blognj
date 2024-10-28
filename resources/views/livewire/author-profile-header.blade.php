<div>
    <div class="page-header">
        <div class="row align-items-center">
            <div class="col-auto">
                <span class="avatar avatar-md" style="background-image: url(...)"></span>
            </div>
            <div class="col-md-6">
                <h2 class="page-title">{{ $author->name }}</h2>
                <div class="page-subtitle">
                    <div class="row">
                        <div class="col-auto">
                            <a href="#" class="text-reset">{{ $author->username }} | {{ $author->authorType->name }}</a>
                        </div>

                        <div class="col-auto text-success">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-check"
                                width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M5 12l5 5l10 -10"></path>
                            </svg>
                            Verified
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-auto d-none d-md-flex">
                <a href="#" class="btn btn-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24"
                        stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M4 21v-13a3 3 0 0 1 3 -3h10a3 3 0 0 1 3 3v6a3 3 0 0 1 -3 3h-9l-4 4" />
                        <line x1="8" y1="9" x2="16" y2="9" />
                        <line x1="8" y1="13" x2="14" y2="13" />
                    </svg>
                    Send message
                </a>
            </div>
        </div>
    </div>
</div>