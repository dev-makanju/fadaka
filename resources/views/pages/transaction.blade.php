@extends('layouts.app')

<!--include header page-->
@section('title' , 'Message')
@section('content')
<section>     
    @include('layouts.sidenav')
    <div id="pages_right" class="column"">
        <div class="pages__main-content-tr
           <div class="message">
            <div class="main-content__box">
                <h1 style="color:#000;">Transaction History</h1>
                <div class="trow-exception">
                     Oops!! , Nothing Found
                </div>
                <div class="main-search">
                     <form action="">
                          <div class="search-bar">
                               <input type="text" placeholder="search-bar">
                               <i class="fa fa-search"></i>
                          </div>
                          <div class="search-bar">
                               <input type="text" placeholder="All Cartigory">
                               <select name="" id="">
                                    <option value="">
                                    </option>
                               </select>
                          </div>
                     </form>
                </div>
                <table>
                     <thead>
                          <th>s/n</th>
                          <th>History</th>
                          <th>All cartigories</th>
                          <th>Date</th>
                     </thead>
                     <tbody>
                          <tr>
                               <td>1</td>
                               <td>Transfer</td>
                               <td>Pos service</td>
                               <td>July 01 2020</td>
                          </tr>
                     </tbody>
                </table>
            </div>
                
           </div>
        </div>
   </div>
</section> 
@endsection