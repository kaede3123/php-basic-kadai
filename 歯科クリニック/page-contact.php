<?php get_header(); ?>

    <main>
        <center><h1 class="contact-title">お問い合わせ</h1><br><br>
		<p>必要事項をご入力の上、送信ボタンを押してください。</p></center>
		<div class="contact-form"><?php echo do_shortcode('[wpforms id="7" title="false"]'); ?></div>
    </main>

<?php get_footer(); ?>