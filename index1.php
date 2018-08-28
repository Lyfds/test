<?php
require('Blog.php');
$blog = new Blog;

$blog->title = '标题';

$blog->getTitle();

echo Blog::VERSION;