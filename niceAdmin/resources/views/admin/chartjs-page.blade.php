@extends('layout/admin-layout')
@section('space-work')
<div class="card">
   <div class="card-body">
       <h5 class="card-title">Bar Chart</h5>
       <canvas id="barChart" style="max-height: 400px"></canvas>
       <script>
           document.addEventListener("DOMContentLoaded", () => {
               new Chart(document.querySelector('#barChart'),{
                   type: 'bar',
                   data: {
                       labels: ['January', 'February', 'March', 'April', 'May'],
                       datasets: [{
                           label: 'Bar Chart',
                           data: [65,67,98,100,20],
                       }]
                   }
               }
           )
           })
           </Script>
   </div>
</div>
@endsection
