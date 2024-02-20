<footer class="footer">
  <div class="footer__container container">
    <div class="footer__logo">
      <a class="footer__logo-link" href="#">
        <img
          class="footer__logo-image"
          src="<?php echo get_template_directory_uri(); ?>/img/logo-footer.svg"
          width="174"
          height="39"
          alt="Capnia logo"
        />
      </a>
    </div>
    <div class="footer__wrapper">
      <div class="footer__customer">
        <ul class="footer__social">
          <li class="footer__social-item">
            <a class="footer__social-link footer-link" href="#"
              >Customer Support</a
            >
          </li>
          <li class="footer__social-item">
            <a
              class="footer__social-link footer__social-link--careers footer-link"
              href="#"
              target="_blank"
              >Careers</a
            >
          </li>
          <li class="footer__social-item">
            <a
              class="footer__social-link footer__social-link--follow footer-link"
              href="#"
              target="_blank"
              >Follow Us</a
            >
          </li>
        </ul>
      </div>
      <div class="footer__contact">
        <a class="footer__contact-link footer-link" href="#">Contact Us</a>
        <address
          class="footer__contact-address footer-contact-item footer-contact-item--address"
        >
          1101 Chess Drive Foster City, CA 94404
        </address>
        <a
          class="footer__contact-tel footer-contact-item footer-contact-item--tel"
          href="tel:8664323788"
        >
          <span class="footer__contact-text">Tel:</span>
          <span class="footer__contact-descr">(866) 432-3788</span>
        </a>
        <a
          class="footer__contact-email footer-contact-item footer-contact-item--email"
          href="mailto:info@capnia.com"
        >
          <span class="footer__contact-text">Email:</span>
          <span class="footer__contact-descr footer__contact-descr--email"
            >info@capnia.com</span
          ></a
        >
      </div>
    </div>
    <div class="footer__info">
      <div class="footer__info-content">
        <span class="footer__info-item">CAPNIA, Inc. © 2024</span>
        <span class="footer__info-item">All Rights Reserved</span>
      </div>
      <div class="footer__info-content">
        <a class="footer__info-item" href="#">Terms of Use</a>
        <a class="footer__info-item" href="#">Privacy Statement</a>
      </div>
    </div>
  </div>
</footer>
<div class="overlay" data-menu-overlay></div>
    </div>
    <?php wp_footer(); ?>
  </body>
</html>