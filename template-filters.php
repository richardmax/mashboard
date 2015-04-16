 <div id="form-ui"> 
      
       <div class='mashboard-filters-left'>
          <div class="btn-group btn-dropdown categories-dropdown">
            
            <button class="btn dropdown-toggle" data-toggle="dropdown"> Select Category <span class="caret"></span> </button>
            <ul id="cat_filters" class="dropdown-menu ui-colour fx-type--border-default">
              <li><a href="#" data-filter="*">Everything</a></li>
              <!--?php 
                $terms = get_terms("category"); // get all categories, but you can use any taxonomy
                $count = count($terms); //How many are they?
                if ( $count > 0 ){  //If there are more than 0 terms
                  foreach ( $terms as $term ) {  //for each term:
                    echo "<li class='col-md-6' ><a href='#' data-filter='.category-".$term->slug."'>" . $term->name . "</a></li>\n";
                    //create a list item with the current term slug for sorting, and name for label
                  }
                } 
              ? -->
              <li class='_col-md-6' ><a href='#' data-filter='.category-work'>"Work"</a></li>
              <li class='_col-md-6' ><a href='#' data-filter='.category-music'>"Music"</a></li>
              <li class='_col-md-6' ><a href='#' data-filter='.category-video'>"Video"</a></li>
              <li class='_col-md-6' ><a href='#' data-filter='.category-photo'>"Photo"</a></li>
            </ul>
          </div>
        </div>
        
        <div class='mashboard-filters-right'>

       
 
<!-- input type="checkbox" name="my-checkbox"  checked="" value=".tag-wordpress">
<input type="checkbox" name="my-checkbox"  checked="" -->
        
        
          <label class='switch switch-twitter'>
            <input type="checkbox" value=".twitter">
            <span></span>
          </label>
          <small></small>
          <label class='switch switch-wordpress'>
            <input type="checkbox" value=".wordpress">
            <span></span>
          </label>
          <label class="switch switch-instagram">
            <input type="checkbox" value=".instagram">
            <span></span>
          </label>
          
          <!-- span class="help-block"></span> 
          <p id="output"></p -->
        </div>