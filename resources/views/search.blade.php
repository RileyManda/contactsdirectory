
<form action="{{ route('search')}}" method ="get" class ="search-form">
               <i class= "fa fa-search search-icon"></i>
               <input type = "text" name = "query" id = "query" vlue ="{{request()->input('query')}}"
			   class ="search-box" placeholder="Search">
               <!--<button type = "submit" class = "btn btn-primary">Search</button>-->
              </form>