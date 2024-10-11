@extends('layout.main')

@section('content')
    <main id="private-messages-main" class="position-relative">
        <section class="private-message-card">
            <div class="container py-5">
                <div class="row bg-white shadow-row">

                    <div class="col-md-4 px-0 bottom-border-col">

                        <aside class="messages-section">
                            <div class="row p-4">
                                <div class="col-12">
                                    <h1 class="section-title fw-bold mb-4">My Messages</h1>
                                    <label class="search-label w-100 d-flex justify-content-between align-items-center ps-2 pe-3 py-2">
                                        <input type="text" class="search-input flex-grow-1" placeholder="Search messages">
                                        <span class="search-icon">
                                            <img src="{{ asset('user/assets/vectors/search-30.png') }}" class="w-100 h-100" alt="">
                                        </span>
                                    </label>
                                </div>
                            </div>
                            <div class="row px-4 pt-3">
                                <div class="col-12">
                                    <ul class="message-list">
                                        <li class="message-item d-flex py-2 {{ Request::is('account-settings-station-profile') ? 'active' : '' }}">
                                            <div class="message-avatar me-3">
                                                <img src="{{ asset('user/assets/img/private-message-img.png') }}" class="w-100 h-100" alt="">
                                            </div>
                                            <div class="message-content flex-grow-1">
                                                <div class="message-header d-flex justify-content-between align-items-center">
                                                    <strong class="message-author fw-semiBold">Darlene Robertson</strong>
                                                    <span class="message-time fw-light">30 min ago</span>
                                                </div>
                                                <div class="message-body d-flex justify-content-between">
                                                    <p class="message-preview fw-light">Lectus urna congue elementumam ent...</p>
                                                    <span class="message-unread-count fw-medium text-white">2</span>
                                                </div>
                                            </div>
                                        </li>
                                        <!-- Repeat similar structure for other message items -->
                                    </ul>
                                </div>
                            </div>
                            <div class="row px-4 pt-3">
                                <div class="col-12">
                                    <ul class="message-list">
                                        <li class="message-item d-flex py-2 {{ Request::is('account-settings-station-profile') ? 'active' : '' }}">
                                            <div class="message-avatar me-3">
                                                <img src="{{ asset('user/assets/img/private-message-img.png') }}" class="w-100 h-100" alt="">
                                            </div>
                                            <div class="message-content flex-grow-1">
                                                <div class="message-header d-flex justify-content-between align-items-center">
                                                    <strong class="message-author fw-semiBold">Darlene Robertson</strong>
                                                    <span class="message-time fw-light">30 min ago</span>
                                                </div>
                                                <div class="message-body d-flex justify-content-between">
                                                    <p class="message-preview fw-light">Lectus urna congue elementumam ent...</p>
                                                    <span class="message-unread-count fw-medium text-white">2</span>
                                                </div>
                                            </div>
                                        </li>
                                        <!-- Repeat similar structure for other message items -->
                                    </ul>
                                </div>
                            </div>
                            <div class="row px-4 pt-3">
                                <div class="col-12">
                                    <ul class="message-list">
                                        <li class="message-item d-flex py-2 {{ Request::is('account-settings-station-profile') ? 'active' : '' }}">
                                            <div class="message-avatar me-3">
                                                <img src="{{ asset('user/assets/img/private-message-img.png') }}" class="w-100 h-100" alt="">
                                            </div>
                                            <div class="message-content flex-grow-1">
                                                <div class="message-header d-flex justify-content-between align-items-center">
                                                    <strong class="message-author fw-semiBold">Darlene Robertson</strong>
                                                    <span class="message-time fw-light">30 min ago</span>
                                                </div>
                                                <div class="message-body d-flex justify-content-between">
                                                    <p class="message-preview fw-light">Lectus urna congue elementumam ent...</p>
                                                    <span class="message-unread-count fw-medium text-white">2</span>
                                                </div>
                                            </div>
                                        </li>
                                        <!-- Repeat similar structure for other message items -->
                                    </ul>
                                </div>
                            </div>
                            <div class="row px-4 pt-3">
                                <div class="col-12">
                                    <ul class="message-list">
                                        <li class="message-item d-flex py-2 {{ Request::is('account-settings-station-profile') ? 'active' : '' }}">
                                            <div class="message-avatar me-3">
                                                <img src="{{ asset('user/assets/img/private-message-img.png') }}" class="w-100 h-100" alt="">
                                            </div>
                                            <div class="message-content flex-grow-1">
                                                <div class="message-header d-flex justify-content-between align-items-center">
                                                    <strong class="message-author fw-semiBold">Darlene Robertson</strong>
                                                    <span class="message-time fw-light">30 min ago</span>
                                                </div>
                                                <div class="message-body d-flex justify-content-between">
                                                    <p class="message-preview fw-light">Lectus urna congue elementumam ent...</p>
                                                    <span class="message-unread-count fw-medium text-white">2</span>
                                                </div>
                                            </div>
                                        </li>
                                        <!-- Repeat similar structure for other message items -->
                                    </ul>
                                </div>
                            </div>
                            <div class="row px-4 pt-3">
                                <div class="col-12">
                                    <ul class="message-list">
                                        <li class="message-item d-flex py-2 {{ Request::is('account-settings-station-profile') ? 'active' : '' }}">
                                            <div class="message-avatar me-3">
                                                <img src="{{ asset('user/assets/img/private-message-img.png') }}" class="w-100 h-100" alt="">
                                            </div>
                                            <div class="message-content flex-grow-1">
                                                <div class="message-header d-flex justify-content-between align-items-center">
                                                    <strong class="message-author fw-semiBold">Darlene Robertson</strong>
                                                    <span class="message-time fw-light">30 min ago</span>
                                                </div>
                                                <div class="message-body d-flex justify-content-between">
                                                    <p class="message-preview fw-light">Lectus urna congue elementumam ent...</p>
                                                    <span class="message-unread-count fw-medium text-white">2</span>
                                                </div>
                                            </div>
                                        </li>
                                        <!-- Repeat similar structure for other message items -->
                                    </ul>
                                </div>
                            </div>
                            <div class="row px-4 pt-3">
                                <div class="col-12">
                                    <ul class="message-list">
                                        <li class="message-item d-flex py-2 {{ Request::is('account-settings-station-profile') ? 'active' : '' }}">
                                            <div class="message-avatar me-3">
                                                <img src="{{ asset('user/assets/img/private-message-img.png') }}" class="w-100 h-100" alt="">
                                            </div>
                                            <div class="message-content flex-grow-1">
                                                <div class="message-header d-flex justify-content-between align-items-center">
                                                    <strong class="message-author fw-semiBold">Darlene Robertson</strong>
                                                    <span class="message-time fw-light">30 min ago</span>
                                                </div>
                                                <div class="message-body d-flex justify-content-between">
                                                    <p class="message-preview fw-light">Lectus urna congue elementumam ent...</p>
                                                    <span class="message-unread-count fw-medium text-white">2</span>
                                                </div>
                                            </div>
                                        </li>
                                        <!-- Repeat similar structure for other message items -->
                                    </ul>
                                </div>
                            </div>
                            <div class="row px-4 pt-3">
                                <div class="col-12">
                                    <ul class="message-list">
                                        <li class="message-item d-flex py-2 {{ Request::is('account-settings-station-profile') ? 'active' : '' }}">
                                            <div class="message-avatar me-3">
                                                <img src="{{ asset('user/assets/img/private-message-img.png') }}" class="w-100 h-100" alt="">
                                            </div>
                                            <div class="message-content flex-grow-1">
                                                <div class="message-header d-flex justify-content-between align-items-center">
                                                    <strong class="message-author fw-semiBold">Darlene Robertson</strong>
                                                    <span class="message-time fw-light">30 min ago</span>
                                                </div>
                                                <div class="message-body d-flex justify-content-between">
                                                    <p class="message-preview fw-light">Lectus urna congue elementumam ent...</p>
                                                    <span class="message-unread-count fw-medium text-white">2</span>
                                                </div>
                                            </div>
                                        </li>
                                        <!-- Repeat similar structure for other message items -->
                                    </ul>
                                </div>
                            </div>
                        </aside>

                    </div>

                    <div class="col-md-8 px-0 pb-4 read-messages">
                        <div class="row mx-0 p-4 message-header">
                            <div class="col-md-8">
                                <div class="d-flex">
                                    <div class="profile-img-wrapper">
                                        <img src="{{ asset('user/assets/img/jacob-jones.png') }}" class="profile-img" alt="">
                                    </div>
                                    <div>
                                        <strong class="user-name">Jacob Jones</strong>
                                        <p class="status-text">online 5 minutes ago</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 d-flex justify-content-end align-items-center">
                                <div class="d-flex">
                                    <a href="#" class="me-4">
                                        <img src="{{ asset('user/assets/vectors/redirect-icon.png') }}" alt="">
                                    </a>
                                    <a href="#" class="d-flex">
                                        <div class="flag-icon-wrapper me-2">
                                            <img src="{{ asset('user/assets/vectors/newsletter-flag.png') }}" class="flag-icon" alt="">
                                        </div>
                                        <span class="report-text">Report</span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="row mx-0 pt-4">
                            <div class="col-12">
                                <div class="row mx-0">
                                    <div class="col-md-6"></div>
                                    <div class="col-md-6 d-flex justify-content-end">
                                        <div class="message-sent">
                                            <button class="message-btn received-msg-btn-left">
                                                Lectus urna congue elementumam ent...
                                            </button>
                                            <span class="msg-time">2 min ago</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mx-0 py-3 separator">
                                    <div class="col-12 d-flex align-items-center">
                                        <div class="flex-grow-1 separator-line"></div>
                                        <span class="separator-text">Today</span>
                                        <div class="flex-grow-1 separator-line"></div>
                                    </div>
                                </div>

                                <!-- Repeated message rows -->
                                <div class="row mx-0">
                                    <div class="col-md-6 d-flex">
                                        <div class="message-received">
                                            <button class="message-btn received-msg-btn-right">
                                                Lectus urna congue elementumam ent...
                                            </button>
                                            <span class="msg-time">2 min ago</span>
                                        </div>
                                    </div>
                                    <div class="col-md-6"></div>
                                </div>
                                <div class="row mx-0">
                                    <div class="col-md-6"></div>
                                    <div class="col-md-6 d-flex justify-content-end">
                                        <div class="message-received">
                                            <button class="message-btn received-msg-btn-left">
                                                Lectus urna congue elementumam ent...
                                            </button>
                                            <span class="msg-time">2 min ago</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- Repeated message rows -->
                                <div class="row mx-0">
                                    <div class="col-md-6 d-flex">
                                        <div class="message-received">
                                            <button class="message-btn received-msg-btn-right">
                                                Lectus urna congue elementumam ent...
                                            </button>
                                            <span class="msg-time">2 min ago</span>
                                        </div>
                                    </div>
                                    <div class="col-md-6"></div>
                                </div>
                                <div class="row mx-0">
                                    <div class="col-md-6"></div>
                                    <div class="col-md-6 d-flex justify-content-end">
                                        <div class="message-received">
                                            <button class="message-btn received-msg-btn-left">
                                                Lectus urna congue elementumam ent...
                                            </button>
                                            <span class="msg-time">2 min ago</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- Repeated message rows -->
                                <div class="row mx-0">
                                    <div class="col-md-6 d-flex">
                                        <div class="message-received">
                                            <button class="message-btn received-msg-btn-right">
                                                Lectus urna congue elementumam ent...
                                            </button>
                                            <span class="msg-time">2 min ago</span>
                                        </div>
                                    </div>
                                    <div class="col-md-6"></div>
                                </div>
                                <div class="row mx-0">
                                    <div class="col-md-6"></div>
                                    <div class="col-md-6 d-flex justify-content-end">
                                        <div class="message-received">
                                            <button class="message-btn received-msg-btn-left">
                                                Lectus urna congue elementumam ent...
                                            </button>
                                            <span class="msg-time">2 min ago</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- Repeated message rows -->
                                <div class="row mx-0">
                                    <div class="col-md-6 d-flex">
                                        <div class="message-received">
                                            <button class="message-btn received-msg-btn-right">
                                                Lectus urna congue elementumam ent...
                                            </button>
                                            <span class="msg-time">2 min ago</span>
                                        </div>
                                    </div>
                                    <div class="col-md-6"></div>
                                </div>
                                <div class="row mx-0">
                                    <div class="col-md-6"></div>
                                    <div class="col-md-6 d-flex justify-content-end">
                                        <div class="message-received">
                                            <button class="message-btn received-msg-btn-left">
                                                Lectus urna congue elementumam ent...
                                            </button>
                                            <span class="msg-time">2 min ago</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- Similar message structure continues -->
                            </div>
                        </div>

                        <div class="row mx-0 p-4">
                            <div class="col-12 px-0">
                                <label for="#" class="message-input-wrapper">
                                    <input type="text" placeholder="Type here..." class="message-input">
                                    <div class="d-flex">
                                        <span class="input-icon"><img src="{{ asset('user/assets/vectors/link-icon.png') }}" alt=""></span>
                                        <span class="input-icon"><img src="{{ asset('user/assets/vectors/send-vector.png') }}" alt=""></span>
                                    </div>
                                </label>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <div class="chat-wrapper d-flex justify-content-end position-absolute">
            <div class="chat-header d-flex justify-content-between align-items-center px-2 mx-2">
                <div class="user-info px-2 d-flex align-items-center">
                    <div class="user-img position-relative me-2">
                        <img src="{{ asset('user/assets/img/chat-img.png') }}" class="w-100 h-100" alt="">
                        <span class="user-status d-inline-block"></span>
                    </div>
                    <strong class="user-name fw-bold text-white">Jacob Jones</strong>
                </div>
                <div class="chat-icons px-2">
                    <img src="{{ asset('user/assets/vectors/chat-redirect.png') }}" class="chat-icon me-2" alt="">
                    <img src="{{ asset('user/assets/vectors/chat-cross.png') }}" class="close-icon" alt="">
                </div>
            </div>

            <div class="chat-footer d-flex justify-content-between align-items-center px-2 mx-2">
                <div class="footer-info px-2 d-flex align-items-center">
                    <div class="chat-icon-wrapper position-relative me-2">
                        <img src="{{ asset('user/assets/vectors/chat-icon.png') }}" class="w-100 h-100" alt="">
                    </div>
                    <strong class="footer-text fw-bold text-white">Messaging</strong>
                </div>
                <div class="footer-icons px-2">
                    <img src="{{ asset('user/assets/vectors/chat-redirect.png') }}" class="chat-icon me-2" alt="">
                    <img src="{{ asset('user/assets/vectors/chat-up-arrow.png') }}" class="arrow-icon" alt="">
                </div>
            </div>
        </div>

    </main>
@endsection
