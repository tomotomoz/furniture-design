<?php get_header(); ?>

<p>お探しのページは削除されたか、名前が変更された可能性があります。<br>
直接アドレスを入力された場合は、アドレスが正しく入力されているかもう一度ご確認ください。
</p>

<p>ブラウザの再読み込みを行っても、このページが表示される場合は、
<a href="<?php echo esc_url(home_url('/')); ?>">トップページ</a>から目的のページをお探しください
</p>

<div class="btn-wrapper">
<a href="<?php echo esc_url(home_url('/')); ?>">トップに戻る</a>

</div>


<?php get_footer(); ?>