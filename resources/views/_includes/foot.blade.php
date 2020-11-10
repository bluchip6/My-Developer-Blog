<!-- Footer -->
<footer id="footer">
    <section>
        <form method="post" action="#">
            <div class="field">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" />
            </div>
            <div class="field">
                <label for="email">Email</label>
                <input type="text" name="email" id="email" />
            </div>
            <div class="field">
                <label for="message">Message</label>
                <textarea name="message" id="message" rows="3"></textarea>
            </div>
            <ul class="actions">
                <li><input type="submit" value="Send Message" /></li>
            </ul>
        </form>
    </section>
    <section class="split contact">
        <section class="alt">
            <h3>Address</h3>
        </section>
        <section>
            <h3>Phone</h3>
            <p><a href="#">+012345678</a></p>
        </section>
        <section>
            <h3>Email</h3>
            <p><a href="#">johndoe@yahoo.com</a></p>
        </section>
        <section>
            <h3>Social</h3>
            <ul class="icons alt">
                <li><a href="https://twitter.com/" class="icon alt fa-twitter"><span class="label">Twitter</span></a></li>
                <li><a href="https://www.facebook.com/" class="icon alt fa-facebook"><span class="label">Facebook</span></a></li>
                <li><a href="https://www.instagram.com/" class="icon alt fa-instagram"><span class="label">Instagram</span></a></li>
                <li><a href="https://github.com/" class="icon alt fa-github"><span class="label">GitHub</span></a></li>
            </ul>
        </section>
    </section>
</footer>


<!-- Copyright -->
<div id="copyright">
    <ul><li>&copy; {{ \Carbon\Carbon::now()->year}} <a href="{{url('/')}}">Marathon Continue Blog</a></li><li><a href="http://www.123456445.com">IKD 2 World </a></li></ul>
</div>


<!-- Scripts -->
<script src="{{url('assets/js/jquery.min.js')}}"></script>
<script src="{{url('assets/js/jquery.scrollex.min.js')}}"></script>
<script src="{{url('assets/js/jquery.scrolly.min.js')}}"></script>
<script src="{{url('assets/js/skel.min.js')}}"></script>
<script src="{{url('assets/js/util.js')}}"></script>
<script src="{{url('assets/js/main.js')}}"></script>
