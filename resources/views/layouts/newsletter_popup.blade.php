<div id="newsletter-popup" class="popup">
    <h2>Subscribe to Our Newsletter</h2>
    <form action="{{ route('subscribe') }}" method="post">
        @csrf
        <input type="email" name="email" placeholder="Your Email">
        <button type="submit">Subscribe</button>
    </form>
</div>
