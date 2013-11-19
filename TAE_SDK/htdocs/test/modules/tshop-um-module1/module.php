<?php
/**
 内容规则：
 1.PHP页面内容只能包含一个根元素（不一定非得是"div"）
 2.根元素类定义包含：class="tb-module tshop-um tshop-um-module1"（class属性可以添加您需要的类选择器定义）
 3.元素class属性值除了"J_TWidget"和"tb-module"，"tb-"和"J_T"字符开头的class属性值禁止定义
 4.不能使用<style>标签（元素）
 5.不能使用<script>标签（元素）
 6.不能使用<link>标签（元素）
 7.不能使用标签（元素）的id属性
 */
?>
<div class="tb-module tshop-um tshop-um-module1" style="">
	<div><button class="viewDnamicInfo">js展示动态文字</button></div>
	<div class="dnamicInfo"></div>
</div>
