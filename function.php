<?php

// セキュリティーの為に記述
function h($str)
{
    return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
}

// return htmlspecialchars($str, ENT_QUOTES, 'UTF-8'); == h($str)
// 省略
