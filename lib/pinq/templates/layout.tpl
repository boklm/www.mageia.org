<!DOCTYPE html>
<html lang="{block name=lang}en{/block}" dir="{block name=ltr}ltr{/block}">
<head>
    <meta charset="utf-8">
    <title>{block name=page_title}{/block}</title>
    <meta name="description" content="{block name=page_desc}{/block}">
    <meta name="keywords" content="{block name=page_kw}{/block}">
    <meta name="author" content="">
    <link rel="canonical" href="{block name=canonical_link}/{/block}">
    <link rel="home" href="http://www.mageia.org/">
    <link rel="alternate" type="application/rss+xml" title="Les nouveautés de Gasparine - RSS" href="/rss/">
    {block name=more_meta}{/block}
</head>
<body class="{$page_class}">

    {include file="nav.tpl"}

    {block name=body}{/block}

    {include file='analytics.tpl'}
</body>
</html>