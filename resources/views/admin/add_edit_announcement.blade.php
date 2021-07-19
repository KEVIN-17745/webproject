
   

    @extends('layouts.admin_layout.admin_layout')
@section('content')
  <!-- /.content-wrapper -->
  <div class="app-main__outer"> 
  <div class="app-main__inner">    
  <div class="main-card mb-4 card">
                            <div class="card-body">
                            <h3 class="card-title">{{$title}}</h3>
            @if ($errors->any())
       <div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
    @endif
                                <form name="announcementForm" id="CannouncementForm"   @if(empty($anndata['id'])) action="{{url('admin/add-edit-announcement')}}"
          @else action="{{url('admin/add-edit-announcement/'.$anndata['id'])}}" @endif method ="post" enctype="multipart/form-data">{{csrf_field()}}
                                    <div class="form-row">
                                        <div class="col-md-4 mb-3">
                                        
                    <label for="name">Title</label>
                    <input type="text" class="form-control" name="title" id="title" placeholder="Enter title" @if(!empty($anndata['title']))
                     value="{{$anndata['title']}}" @else value="{{old('title')}}" @endif>
                  
                                        </div>
                                        <div class="col-md-4 mb-3">
                                        <label for="name">Date</label>
                    <input type="date" class="form-control" name="date" id="date" placeholder="yy-mm-dd"@if(!empty($anndata['date']))
                     value="{{$anndata['date']}}" @else value="{{old('date')}}" @endif>
                                        </div>
                                        
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-6 mb-3">
                                        <label for="name">Content</label>
                    
                    <textarea class="form-control" id="content" name ="content" rows="4" placeholder="Enter ...">@if(!empty($anndata['content']))
                 {{$anndata['content']}} @else {{old('content')}} @endif</textarea>
                                        </div>
                                        
                                    </div>
                                    
                                    </div>
                                    <button class="btn btn-primary" type="submit"  >Submit form</button>
                                    @csrf
                                </form>
            
                                
                            </div>
                        </div>  
                                  </div>
                                  </div>
                        @endsection

                         