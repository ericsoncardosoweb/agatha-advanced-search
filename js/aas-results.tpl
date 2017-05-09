<ul id="aas_search_results" class="search_results aas_search_results">
<input type="hidden" name="query" value="<%- resultsSearchTerm %>" />
<% _.each(searchResults, function(searchResult, index, list) { %>
        <%
        // Thumbnails
        if(AgathaAdvancedSearchConfig.showThumbs == "true" && searchResult.attachment_thumbnail) {
                liClass = "post_with_thumb";
        }
        else {
                liClass = "";
        }
        %>
        <li class="agatha-advanced-search_result <%- liClass %> '">
        <% if(AgathaAdvancedSearchConfig.showThumbs == "true" && searchResult.attachment_thumbnail) { %>
                <img src="<%= searchResult.attachment_thumbnail %>" class="post_thumb" />
        <% } %>

        <a href="<%= searchResult.permalink %>" class="agatha-advanced-search_title"><%= searchResult.post_title %></a>

        <% if(searchResult.post_price !== undefined) { %>
                <p class="price"><%- searchResult.post_price %></p>
        <% } %>

        <% if(AgathaAdvancedSearchConfig.showExcerpt == "true" && searchResult.post_excerpt) { %>
                <p class="excerpt clearfix"><%= searchResult.post_excerpt %></p>
        <% } %>

        <% if(e.displayPostMeta) { %>
                <p class="meta clearfix agatha-advanced-search_author" id="agatha-advanced-search_author">Posted by <%- searchResult.post_author_nicename %></p><p id="agatha-advanced-search_date" class="meta clearfix agatha-advanced-search_date"><%- searchResult.post_date %></p>
        <% } %>
        <div class="clearfix"></div></li>
<% }); %>

<% if(searchResults[0].show_more !== undefined && searchResults[0].show_more && AgathaAdvancedSearchConfig.showMoreResultsLink == "true") { %>
        <div class="clearfix search_footer"><a href="<%= AgathaAdvancedSearchConfig.blogURL %>/?s=<%-  resultsSearchTerm %>">Ver mais resultados</a></div>
<% } %>
<!-- <%- AgathaAdvancedSearchConfig.viewMoreText %> -->
</ul>