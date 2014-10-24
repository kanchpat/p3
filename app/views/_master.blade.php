<!DOCTYPE html>
<html>
<head>
    <title>
        @yield('title','Developer Tools')
    </title>
    <meta charset='utf-8'>
    <link rel='stylesheet' href='/css/styleforpwdgen.css' type='text/css'>
</head>

<body>
<div id="header" class="header">
    <h1>
        @yield('head')
    </h1>
</div>
<div id="content" class="content">
    <br>
    <br>
    @yield('content')
</div>
<div id="errors" class="errors">
    @yield('errors','')
</div>
<br>
<div id="buttons" class="buttons">
    @yield('buttons')
</div>
<div id="body" class="body">
    @yield('body')
</div>
<br>
<div id="result" class="result">
    @yield('result')
</div>
<div id="back" class="back">
    <br>
    @yield('back')
</div>
<footer>
    <div id="footer" class="footer">
        <a href="http://jigsaw.w3.org/css-validator/validator?uri=p3.kanch.me&profile=css3&ampusermedium=all&ampwarning=1&ampvextwarning=">
            Validate CSS
        </a>
        <br>
        <a href="http://validator.w3.org/check?uri=p3.kanch.me&ampcharset=%28detect+automatically%29&ampdoctype=Inline&ampgroup=0">
            Validate HTML
        </a>
    </div>
</footer>
</body>
</html>