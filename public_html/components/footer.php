<footer id="kontakt" class="footer">
    <div class="footer-con container">
        <div class="footer-mid">
            <div class="mail">
                <h2 class="title">
                    Lassen sie <br />
                    uns reden
                </h2>
                <div class="sec">
                    <div id="lottie-con"></div>
                    <h2 class="email">
                        <a href="mailto:hazem@dioscuri.design">hazem@dioscuri.design</a>
                    </h2>
                </div>
            </div>
            <div class="get-in-touch neo">
                <form class="contact-form row" action="components/send-email.php" method="POST">
                    <input autocomplete="false" name="hidden" type="text" style="display: none" />
                    <div class="form-field">
                        <input id="name" name="name" class="input-text js-input neo" type="text" required />
                        <label class="label" for="name">Name</label>
                    </div>
                    <input autocomplete="false" name="hidden" type="text" style="display: none" />
                    <div class="form-field">
                        <input id="email" name="email" class="input-text js-input neo" type="email" required />
                        <label class="label" for="email">E-mail</label>
                    </div>
                    <div class="form-field">
                        <textarea id="message" name="message" class="input-text js-input neo" rows="5" required></textarea>
                        <label class="label" for="message">Nachricht</label>
                    </div>
                    <div class="form-field">
                        <button type="submit" class="btn neo cta"><span>Senden</span></button>
                    </div>
                </form>
            </div>
        </div>
        <div class="footer-mid-2">
            <ul>
                <li>
                    <a target="_blank" href="components/datenschutz.php">Datenschutz</a>
                </li>
                <li>
                    <a target="_blank" href="components/impressum.php">Impressum</a>
                </li>
            </ul>
        </div>
        <div class="footer-bottom">
            <p>&copy; <?php echo date("Y"); ?> Dioscuri. Alle Rechte Vorhanden.</p>
        </div>
    </div>
</footer>