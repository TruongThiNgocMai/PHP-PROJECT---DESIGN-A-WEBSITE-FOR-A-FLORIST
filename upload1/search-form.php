<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>PHP Live MySQL Database Search</title>
<style type="text/css">

body {
    background: #fff;
    color: #666;
    font: 90%/180% Arial, Helvetica, sans-serif;
    width: 800px;
    max-width: 96%;
    margin: 0 auto;
}
a {
    color: #69C;
    text-decoration: none;
}
a:hover {
    color: #F60;
}
h1 {
    font: 1.7em;
    line-height: 110%;
    color: #000;
}
p {
    margin: 0 0 20px;
}


input {
    outline: none;
}
input[type=text] {
    -webkit-appearance: textfield;
    -webkit-box-sizing: content-box;
    font-family: inherit;
    font-size: 100%;
}
input::-webkit-search-decoration,
input::-webkit-search-cancel-button {
    display: none; 
}


input[type=text] {
    background: #ededed url(https://static.tumblr.com/ftv85bp/MIXmud4tx/search-icon.png) no-repeat 9px center;
    border: solid 1px #ccc;
    padding: 9px 10px 9px 32px;
    width: 55px;
    
    -webkit-border-radius: 10em;
    -moz-border-radius: 10em;
    border-radius: 10em;
    
    -webkit-transition: all .5s;
    -moz-transition: all .5s;
    transition: all .5s;
}
input[type=text]:focus {
    width: 130px;
    background-color: #fff;
    border-color: #66CC75;
    color: red;
    -webkit-box-shadow: 0 0 5px rgba(109,207,246,.5);
    -moz-box-shadow: 0 0 5px rgba(109,207,246,.5);
    box-shadow: 0 0 5px rgba(109,207,246,.5);
}


input:-moz-placeholder {
    color: #999;
}
input::-webkit-input-placeholder {
    color: #999;
}

.search-box input[type=text] {
    width: 15px;
    padding-left: 10px;
    color: black;
    cursor: pointer;
    display: inline-block;
}
.search-box input[type=text]:hover {
    background-color: #999;
}
.search-box input[type=text]:focus {
    width: 130px;
    padding-left: 32px;
    color: #000;
    background-color: #999;
    cursor: auto;
}
.search-box input:-moz-placeholder {
    color: black;
}
.search-box input::-webkit-input-placeholder {
    color: black;
}

    /*.search-box{
        width: 300px;
        position: relative;
        display: inline-block;
        font-size: 14px;
    }*/
.search-box input[type="text"]{
        height: 32px;
        padding: 5px 10px;
        border: 1px solid #CCCCCC;
        font-size: 14px;
        position: absolute;
    }
    /*.result{
        position: absolute;        
        z-index: 999;
        top: 100%;
        left: 0;
    }*/
    /*.search-box input[type="text"], .result{
        width: 100%;
        box-sizing: border-box;
    }*/
     
    .result p{
        margin: 0;
        padding: 7px 7px;
        border: 1px solid #CCCCCC;
        border-top: none;
        cursor: pointer;
        color: AQUAMARINE;
        background: GRAY;
    }
    .result p:hover{
        background: #f2f2f2;
    }
</style>
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    $('.search-box input[type="text"]').on("keyup input", function(){
        /* Get input value on change */
        var inputVal = $(this).val();
        var resultDropdown = $(this).siblings(".result");
        if(inputVal.length){
            $.get("backend.php", {term: inputVal}).done(function(data){
                // Display the returned data in browser
                resultDropdown.html(data);
            });
        } else{
            resultDropdown.empty();
        }
    });
    
    // Set search input value on click of result item
    $(document).on("click", ".result p", function(){
        $(this).parents(".search-box").find('input[type="text"]').val($(this).text());
        $(this).parent(".result").empty();
    });
});
</script>
</head>
<body>
    <div class="search-box">
        <input type="text" autocomplete="off" placeholder="Search flowers..." />
        <div class="result"></div>
    </div>
</form>
</body>
</html>