<link rel="stylesheet" href="{{asset("css/footer.css")}}">
@section('footer')

    <footer>
        <div class="foo_content">
            <div class="foo_content_out">
                <div class="contact_info">
                    <div class="info_com">
                        <div class="info_title">Lorem Ipsum, Inc.</div>
                        <div class="info_text">© 2021 Lorem Ipsum. All rights reserved.</div>
                        <div class="info_desiner">Designed by Lorem Ipsum.</div>
                    </div>
                    <div class="info_contacts">
                        <div class="email_contacts">
                            <a href="mailto:vitukivan05@gmail.com">loremIpsum@gmail.com</a>
                        </div>
                        <div class="phone_contacts">
                            <a href="tel:+380965244909">loremIpsum</a>
                        </div>
                    </div>
                </div>
                <div class="menu_info">
                    <div class="menu_links">
                        <ul>
                            <li><a href="/">Projects</a></li>
                            <li><a href="/about">About</a></li>
                            <li><a href="/">Services</a></li>
                            <li><a href="/">Carrer</a></li>
                        </ul>
                        <ul>
                            <li><a href="/">News</a></li>
                            <li><a href="/">Events</a></li>
                            <li><a href="/">Contacts</a></li>
                            <li><a href="/">Legals</a></li>
                        </ul>
                        @guest
                        <ul>
                        @if (Route::has('login'))
                    
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @endif
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                        
                        @endguest
                    </div>
                    <div class="soc_net">
                        <ul>
                            <li><a href="https://www.facebook.com/" target="_blank">Facebook</a></li>
                            <li><a href="https://twitter.com/" target="_blank">Twitter</a></li>
                            <li><a href="https://www.tiktok.com/" target="_blank">TikTok</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
@endsection

