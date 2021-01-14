@extends('base')
@section('main')

<script type="text/javascript">

 

</script>


<div class="row">
    <div class="col-sm-8 offset-sm-2" style="margin-bottom: 50px;auto;display: block">
     <br />
       <h3 class="display-5 text-center">New Ticket Booking</h3>
     <div>
       @if ($errors->any())
         <div class="alert alert-danger">
           <ul>
               @foreach ($errors->all() as $error)
                 <li>{{ $error }}</li>
               @endforeach
           </ul>
         </div>
         <br />
       @endif
         <form method="post" action="{{ route('train.store') }}">
             @csrf
   
       <div style="width: 50%;margin: auto;display: block;">
           <div class="form-group">
             <label for="origin">Origin</label>
             <select class="form-control" id="origin" name="origin">
               <option value="johor">Johor(Johor Bahru)</option>
               <option value="kedah">Kedah(Alor Setar)</option>
               <option value="kelantan">Kelantan(Kota Bharu)</option>
               <option value="melaka">Melaka(Bandar Melaka)</option>
               <option value="negeri Sembilan">Negeri Sembilan(Seremban)</option>
               <option value="pahang">Pahang(Kuantan)</option>
               <option value="perak">Perak(Ipoh)</option>
               <option value="perlis">Perlis(Kangar)</option>
               <option value="pulau Pinang">Pulau Pinang(Georgetown)</option>
               <option value="selangor">Selangor(Shah Alam)</option>
               <option value="terengganu">Terengganu(Kuala Terengganu)</option>
               <option value="wilayah persekutuan">Wilayah Persekutuan(Kuala Lumpur)</option>               
             </select>
           </div>
         </div>

         <div style="width: 50%;margin: auto;display: block;">
          <div class="form-group">
            <label for="destination">Destination</label>
            <select class="form-control" id="destination" name="destination" >
              <option value="johor">Johor(Johor Bahru)</option>
              <option value="kedah">Kedah(Alor Setar)</option>
              <option value="kelantan">Kelantan(Kota Bharu)</option>
              <option value="melaka">Melaka(Bandar Melaka)</option>
              <option value="negeri Sembilan">Negeri Sembilan(Seremban)</option>
              <option value="pahang">Pahang(Kuantan)</option>
              <option value="perak">Perak(Ipoh)</option>
              <option value="perlis">Perlis(Kangar)</option>
              <option value="pulau Pinang">Pulau Pinang(Georgetown)</option>
              <option value="selangor">Selangor(Shah Alam)</option>
              <option value="terengganu">Terengganu(Kuala Terengganu)</option>
              <option value="wilayah persekutuan">Wilayah Persekutuan(Kuala Lumpur)</option>           
            </select>
          </div>
        </div>
   
         <div style="width: 50%;margin: auto;display: block;">
         <div class="form-group">
           <label for="id">Worker ID</label>
           <input type="number" class="form-control" id="id" name="id" placeholder="Enter worker ID">
         </div>
       </div>
   
       
   
   
             < class="row justify-content-center">
             <a href="{{ route('students.index')}}" class="btn btn-primary">Returns</a>&nbsp;&nbsp;                        
             <button type="submit" class="btn btn-primary text-center" style="margin-right: 10px">Save Details</button>
             <button type="reset" class="btn btn-primary" name="reset">Reset</button>
             </>
         </form>
     </div>
   </div>
   </div>


@endsection