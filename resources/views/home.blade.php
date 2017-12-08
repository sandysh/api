@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div>
            <vue-user-pagination></vue-user-pagination>
        </div>
    
     {{-- <nav aria-label="...">
       <ul class="pager">
         <li class="previous" @click.prevent="prevUrl()"><a href="#"><span aria-hidden="true">&larr;</span> Older</a></li>
         <li class="next" @click.prevent="nextUrl()"><a href="#">Newer <span aria-hidden="true">&rarr;</span></a></li>
       </ul>
     </nav>  --}}  
      {{--   <div class="form-group">
         <label class="col-sm-4 control-label">संस्थाको नाम <small class="text-danger">*</small></label>
                <div class="col-sm-8">
                    <input type="text" id="companyName" name="companyName" class="form-control translate-nepali" placeholder="संस्थाको नाम">
            </div>
             </div> --}}

    </div>

</div>



@endsection
 
 @push('scripts')
 @endpush
