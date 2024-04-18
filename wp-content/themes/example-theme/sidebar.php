<aside>
    <section class="search">
        <div class="search-content">
            <?php
            get_search_form();
            ?>
        </div>
    </section>
    <section class="contact">
        <div class="contact-content">
            <h2>Contact Us</h2>
            <p>
                For any inquiries, please fill out the form below or contact us directly via email. We look forward to hearing from you.
            </p>
            <form action="/contact" method="post">
                <input type="text" name="name" placeholder="Your Name" required>
                <input type="email" name="email" placeholder="Your Email" required>
                <textarea name="message" placeholder="Your Message" required></textarea>
                <input type="submit" value="Submit">
            </form>
        </div>
    </section>
</aside>