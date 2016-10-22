$(function(){
    //get the click create button
     $('#modalButton').click(function (){
        $('#modal').modal('show')
            .find('#modalContent')
            .load($(this).attr('value'));
     });
});  

$("#rss-container").html("");
            
            //https://ph.news.yahoo.com/rss/opinion
            ////www.senate.gov.ph/rss/rss_news.aspx
            //http://www.inquirer.net/fullfeed
            
            $.ajax({
                url: 'http://ajax.googleapis.com/ajax/services/feed/load?v=1.0&num=8&q=http://www.inquirer.net/fullfeed',
                type: 'GET',
                dataType: 'jsonp',
                success: function(data) {
                    console.log(data);
                
                    var entries = data.responseData.feed.entries;
                    var totalEntries = entries.length;
                    var currentEntry = 0;
                    
                    
                    
                    for(var i = 0; i < totalEntries; i++) {
                        var entry = entries[i];
                        
                        var media = "";                     
                        if(entry.mediaGroups !== undefined) {
                            media = entry.mediaGroups[0].contents[0].url;
                        }
                        
                        var html = "<div id='entry_" + i + "' style='display: block'>" +
                                        "<div><a href='" + entry.link + "'><h4>" + entry.title + ".</h4></a></div>" +
                                        "<img src='" + media + "' width='130' height='90' align='left' border='0' />" +
                                        "<div>" + entry.content + "</div>" +
                                        //"<div style='float: right;'><a href='" + entry.link + "'>read more</a></div>" +
                                    "</div>";
                    
                        $("#rss-container").append(html);
                    }
                }
            });
        