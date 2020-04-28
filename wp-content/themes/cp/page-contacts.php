<?php
/*
Template Name: page-contacts
*/
 get_header(); ?>

 
<section class="page-top page-contacts">   
    <div class="page__container">
        <a class="back" href=""> <span class="left-arrow"></span> Назад</a>
        <div class="top-nav__links page-contacts__links">
            <a href="">Главная</a>
            <a href="">Мероприятия</a>
            <a href="">Собрания</a>
        </div>
        <h1 class="page-title page-contacts__title">
            Контакты
        </h1>
    </div>
</section>

<section class="main-content__contacts">
    <div class="flex_col-desk--1-1 contacts-content__container">

        <div class="main-content__contacts-text">
            <span>
                Мы всегда рады видеть и слышать своих единомышленников. Поэтому если Вам необходимо связаться с нами, Вы можете написать нам на почту, или заполнить форму обратной связи.
            </span>
        </div>
        <div class="main-content__contacts-mail">            
            <svg class="icon contacts-mail__bg"><use xlink:href="#black-letter" /></svg>
            <span class="mail-adress">office@gmail.com</span>
        </div>
        <div class="main-content__contacts-links">
            <a href="">
                <svg class="icon"><use xlink:href="#yellow-inst" /></svg>
            </a>
            <a href="">
                <svg class="icon"><use xlink:href="#blue-telegram" /></svg>
            </a>
            <a href="">
                <svg class="icon"><use xlink:href="#red-ytb" /></svg>
            </a>         
        </div>
    </div>
</section>

<section class="contacts-form">
    <div class="flex_col-desk--1-1 contacts-content__container">
        <h2>Появились вопросы? Задайте их нам.</h2>
        <form action="">

            <div class="flex_col-tab--1-1 flex_col-desk--2-3 form-block ">
                <input class="flex_col-desk--1-2" type="text" placeholder="Имя*" required>
                <input class="flex_col-desk--1-2" type="text" placeholder="Тема">          
                <input class="flex_col-desk--1-2" type="email" placeholder="Email*" required>  
                <input class="flex_col-desk--1-2" type="text" placeholder="Статья">
            </div>

            <div class="flex_col-tab--1-1 flex_col-desk--1-3 form-block">
                <textarea placeholder="Ваше сообщение" id="textArea-connect" rows="1"></textarea>
            </div>
          
            <div class="form-block flex_col--1-1">
                <button type="submit">Отправить</button>
            </div>

        </form>
    </div>
</section>









<?php get_footer(); ?>