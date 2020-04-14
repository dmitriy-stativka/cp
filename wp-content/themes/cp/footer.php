<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package cp
 */
?>

<?php wp_reset_query(); ?>
	
	<footer class="footer">
		<div class="popup__overlay">
			<span class="popup__close"><span></span></span>
		  <div class="popup">
			  <h1>Появились вопросы?
				Задайте их профессионалу</h1>
			<!-- <p>
				Рамки и место обучения кадров представлет собой интересный эксперимент проверки направлений прогрессивного развития
			</p> -->
			<form action="">
				<input type="text" placeholder="Имя*" required>
				<input type="email" placeholder="Email*" required>
				<input type="text" placeholder="Тема">
				<input type="text" placeholder="Статья">
				<textarea
                placeholder="Ваше сообщение"
                id="textArea-connect"
                rows="1"                
			  ></textarea>
			  <button type="submit">Отправить</button>
			</form>
		</div>
	  </div>
	  <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">        
		<symbol id="fish" viewBox="0 0 23 23">
		  <path
			fill="#fff"
			d="M2.224 10.08c0-4.307 3.503-7.805 7.804-7.805 4.306 0 7.805 3.503 7.805 7.804 0 4.302-3.499 7.81-7.805 7.81-4.301 0-7.804-3.504-7.804-7.81zm19.835 11.128l-5.175-5.175a9.043 9.043 0 0 0 2.228-5.954c0-5.01-4.074-9.079-9.08-9.079C5.024 1 .954 5.075.954 10.08c0 5.004 4.075 9.079 9.08 9.079 2.276 0 4.358-.84 5.954-2.229l5.175 5.175a.642.642 0 0 0 .448.189.638.638 0 0 0 .449-1.086z"
		  />
		  <path
			fill="none"
			stroke="#fff"
			stroke-miterlimit="50"
			stroke-width=".5"
			d="M2.224 10.08c0-4.307 3.503-7.805 7.804-7.805 4.306 0 7.805 3.503 7.805 7.804 0 4.302-3.499 7.81-7.805 7.81-4.301 0-7.804-3.504-7.804-7.81zm19.835 11.128l-5.175-5.175a9.043 9.043 0 0 0 2.228-5.954c0-5.01-4.074-9.079-9.08-9.079C5.024 1 .954 5.075.954 10.08c0 5.004 4.075 9.079 9.08 9.079 2.276 0 4.358-.84 5.954-2.229l5.175 5.175a.642.642 0 0 0 .448.189.638.638 0 0 0 .449-1.086z"
		  />
		</symbol>
	  </svg>
	</footer>

<?php wp_footer(); ?>

</div> 
<!-- wrapper end -->

<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>


<script src="/wp-content/themes/cp/js/app.min.js"></script>
</body>
</html>