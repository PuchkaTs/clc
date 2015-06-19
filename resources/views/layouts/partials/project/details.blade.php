<div class="col-md-6" >
    <p><i class="fa fa-flag" style="width: 15px;"></i> {{ $project->available ? 'Available' : 'Rented' }}</p>
</div>
<div class="col-md-6">
    <p><i class="fa fa-cube" style="width: 15px;"></i> BEDROOMS:  {{ $project->rooms}} </p>
</div>
<div class="col-md-6">
    <p><i class="fa fa-leaf" style="width: 15px;"></i> BATHROOMS:  {{ $project->bathrooms}}</p>
</div>
<div class="col-md-6">
    <p><i class="fa fa-square-o" style="width: 15px;"></i> SIZE:  {{ $project->size}} square meters</p>
</div>
