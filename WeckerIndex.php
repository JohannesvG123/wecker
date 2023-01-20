<html>
<body>

<h1>Wecker v1</h1>

Zeugs eingeben:<br>

<form name="form1" action="/cgi-bin/alarm.py" method="get">
    Uhrzeit: <input type="time" name="timeBox"><br>
    Link: <input type="text" name="linkBox"><br>
    <input type="submit" value="Wecker stellen!" formtarget="_blank">
</form>

<br>
mit php bestätiogung bauen
<br>
code quelle:
https://stackoverflow.com/questions/15965646/posting-html-form-values-to-python-script

.<br>.<br>.<br>.<br>.<br>.<br>
<div id="buttons">
    <label> <input id="query" value='cats' type="text"/><button id="search-button"    onclick="keyWordsearch()">Search</button></label>
    <div id="container">
        <h1>Search Results</h1>
        <ul id="results"></ul>
    </div>
    <script>
        function keyWordsearch(){
            gapi.client.setApiKey('api_key_here');
            gapi.client.load('youtube', 'v3', function(){
                makeRequest();
            });
        }
        function makeRequest(){
            var q = $('#query').val();
            var request = gapi.client.youtube.search.list({
                q: q,
                part: 'snippet',
                maxResults: 10
            });
            request.execute(function(response)  {
                $('#results').empty()
                var srchItems = response.result.items;
                $.each(srchItems, function(index, item){
                    vidTitle = item.snippet.title;
                    vidThumburl =  item.snippet.thumbnails.default.url;
                    vidThumbimg = '<pre><img id="thumb" src="'+vidThumburl+'" alt="No  Image  Available." style="width:204px;height:128px"></pre>';

                    $('#results').append('<pre>' + vidTitle + vidThumbimg +   '</pre>');
                })
            })
        }
    </script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    <script src="https://apis.google.com/js/client.js?onload=googleApiClientReady">   </script>
</body>
</html>