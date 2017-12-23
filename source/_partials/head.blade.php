<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<meta name="theme-color" content="#ffffff">
<link rel="stylesheet" href="{{ elixir('css/main.css', 'build') }}">
<meta name="google-site-verification" content="xEjRvI-66es5w1rNkXoLeIcOQH-x0JZYst9uHHwD_1E" />
<link rel="apple-touch-icon" sizes="180x180" href="/favicons/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicons/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicons/favicon-16x16.png">
<link rel="manifest" href="/favicons/manifest.json">
<link rel="mask-icon" href="/favicons/safari-pinned-tab.svg" color="#5bbad5">
<link rel="shortcut icon" href="/favicons/favicon.ico">
<meta name="apple-mobile-web-app-title" content="Code to go">
<meta name="application-name" content="Code to go">
<meta name="msapplication-config" content="/favicons/browserconfig.xml">

<?php
$title = "JavaScript Code to go";
$description = "Javascript code to go: Find updated snippets for common JavaScript use cases.";
if (isset($question) && $question){
    $title = "$question | Code to go";
    $description = "$question | Code to go";
}
?>

<meta name="description" content="{{$description}}">

<meta name="twitter:card" content="summary">
<meta name="twitter:title" content="{{$title}}">
<meta name="twitter:description" content="{{$description}}">
<meta name="twitter:image" content="/images/share.png">

<meta name="og:title" content="{{$title}}" />
<meta name="og:type" content="article" />
<meta name="og:image" content="/images/share.png" />
<meta name="og:description" content="{{$description}}" />
<meta name="og:site_name" content="Code to go" />
