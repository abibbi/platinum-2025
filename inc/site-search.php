<button id="btn-search-close" class="btn btn--search-close" aria-label="Close search form">
            <i class="fa fa-close" aria-hidden="true"></i>
        </button>
        <form method="GET" class="search__form" action="search.php">
				<input type="text" name="zoom_query" size="20" class="search__input" placeholder="Search" autocomplete="off" autocapitalize="off" spellcheck="false" title="field to type what you are trying to search">
				<input type="submit" value="Search">
				<span class="search__info"><strong>Hit enter to search or ESC to close</strong></span>
			</form>
