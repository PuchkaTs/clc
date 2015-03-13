<div class="col-md-6" >
    <p><i class="fa fa-usd" style="width: 15px;"></i> PRICE:  {{ number_format($project->price)}} MNT per month</p>
</div>
<div class="col-md-6">
    <p><i class="fa fa-cube" style="width: 15px;"></i> ROOMS:  {{ $project->rooms}} </p>
</div>
<div class="col-md-6">
    <p><i class="fa fa-leaf" style="width: 15px;"></i> BATHROOMS:  {{ $project->bathrooms}}</p>
</div>
<div class="col-md-6">
    <p><i class="fa fa-square-o" style="width: 15px;"></i> SIZE:  {{ $project->size}} square meters</p>
</div>
<div class="col-md-6">
    <p><i class="fa fa-flag" style="width: 15px;"></i> YEAR BUILT:  {{ $project->year}}</p>
</div>