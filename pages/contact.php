        <div id="contact" class="page">
          <div id="contact_main">
            <h2>Email Bake and Play!</h2>
            <p>We are always happy to hear from you and try our best to respond quickly.</p>
            <div id="contact_form">
              <form id="emailform" action="pages/email.php" method="post">
                <input name='name' type="text" id="name" class="input-medium input-block-level input-big" placeholder="Your Name" label="false" />
                <input name='email' type="text" id="email" class="input-medium input-block-level input-big" placeholder="Your Email Address" label="false" />
                <input name='subject' type="text" id="subject" class="input-medium input-block-level input-big" placeholder="Subject" label="false" />
                <textarea id="text" type="text" name="text" placeholder="Please enter your message here."></textarea>
                <input type="submit" type="text" value="Submit" label='Submit', class='btn btn-large btn-primary btn-block mt5' />
              </form>
            </div>
          </div>
          <script type="text/javascript" src="js/ajax_email.js"></script>
        </div> <!-- end div contact -->

