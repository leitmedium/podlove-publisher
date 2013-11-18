<?php

$episode_list_before = '<style type=\"text/css\">
    tr.episode-list-metadata {
        cursor: pointer;
    }

                                     tr.episode-list-summary {
        display: none;
    }
    table.podlove-episode-list-table tr td {
        
                                     vertical-align: top;    
    }
    
    table.podlove-episode-list-table img {
        
                                     width: 5em;
    }
    span.episode-list-subtitle {
        
                                     display: block;
        opacity: 0.8;
    }

                                     </style>
<table class=\"podlove-episode-list-table\">
   
                                     <thead>
        <tr>
            <th style=\"width: 5em;\"></th>
           
                                     <th style=\"width: 6em;\">Date</th>
            <th>Title</th>
            
                                     <th>Duration</th>
        </tr>
    </thead>
    <tbody>';

$episode_list_content = '       <tr class=\"episode-list-metadata\">
           
                                     <td><img src=\"%episode-cover%\" alt=\"%episode-title%\" /></td>
           
                                     <td style=\"opacity: 0.8;\">%episode-date%</td>
           
                                     <td style=\"font-size: 1.1em;\"><a href=\"%episode-url%\"><strong>%episode-title%</strong></a>
                                     <span class=\"episode-list-subtitle\">%episode-subtitle%</span></td>
           
                                     <td style=\"opacity: 0.8; text-align: right;\">%episode-duration%</td>
       </tr>
       
                                     <tr class=\"episode-list-summary\">
          
                                     <td colspan=\"4\">%episode-summary%</td>    
       </tr>';

$episode_list_after = '    </tbody>
</table>

                                     <script>
    jQuery(\"tr.episode-list-metadata\").click(function() { jQuery(this).next().toggle() });
</script>';

$feed_list_before = '<script src=\"http://b.instaca.st/instacast-button.js\" async></script>

                                    <style type=\"text/css\">
    table.podlove-feed-list-table tr td {
            vertical-align: top;
    
                                    }
</style>
<table class=\"podlove-feed-list-table\">
    <thead>
        <tr>
            
                                    <th>Title</th>
            <th>Media Type</th>
            <th>Subscribe</th>
        
                                    </tr>
    </thead>
    <tbody>';

$feed_list_content = '       <tr class=\"feed-list-metadata\">
 
                                    <td><a href=\"%feed-url%\">%feed-title%</a><br /></td>
           <td>%feed-mediafile%</td>
         
                                    <td>
               <select class=\"subscribe_selector\" data-url=\"%feed-url%\" id=\"subscribe_selector_%feed-mediafile-stripped%\">
                 
                                    <option value=\"\">Please choose</option>
                   <option value=\"copy\">Show URL</option>
                                    
                   <option value=\"instacast\">Instacast</option>
                   
                                    <option value=\"itunes\">iTunes</option>
               </select>
           </td>
       
                                    </tr>';

$feed_list_after = '    </tbody>
</table>
<script type=\"text/javascript\">
    
                                    jQuery(\"select.subscribe_selector\").change(function () { 
                                    switch(jQuery(this).val()) {
            case \"copy\" :
               
                                    prompt(\"Copy and paste this URL in your Podcatcher:\", jQuery(this).data(\"url\"));
  
                                    break;
            case \"instacast\" :
               
                                    window.open(\"http://b.instaca.st/button/subscribe?url=\" + encodeURIComponent(jQuery(this).data(\"url\")));

                                    break;           
            case \"itunes\" :
                
                                    window.open(jQuery(this).data(\"url\").replace(\"http://\", \"itpc://\"));
            
                                    break;

        }
    });
</script>';

?>