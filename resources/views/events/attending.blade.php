<!-- Events Attending -->
      <div class="card-block">
          <div class="table-responsive">
            <h4 class="card-block__title mb-4">Events Attending</h4>
              <table id="data-table" class="table table-bordered .table-striped" >
                  <thead class="thead-default">
                      <tr>
                          <th>Event Name</th>
                          <th>Location</th>
                          <th>Venue</th>
                          <th>Dates</th>
                          <th>Days Away</th>
                      </tr>
                  </thead>
                  <tfoot>
                      <tr>
                        <th>Event Name</th>
                        <th>Location</th>
                        <th>Venue</th>
                        <th>Dates</th>
                        <th>Days Away</th>
                      </tr>
                  </tfoot>
                  <tbody>
                    <!--TO DO: Only show future events this profile is marked as attending -->
                      @foreach($events as $event)
                          <tr>
                              <td>{{ $event->title}}</td>
                              <td>{{ $event->city}}</td>
                              <td>{{ $event->venue}}</td>
                              <td>
                              {{ date('M d', strtotime($event->startDate)) }} -
                              {{ date('M d, y', strtotime($event->endDate)) }}
                            </td>
                            <td>
                              <?php
                              $event_date = date_create($event->startDate);
                              $todays_date = new \DateTime();
                              $todays_date->createFromFormat('d/m/Y', '10/06/2015');
                              $interval2 = $event_date->diff($todays_date);
                              $interval2 = $todays_date->diff($event_date);
                              echo $interval2->format('%y years %m months');
                              ?>
                            </td>


                          </tr>
                          @endforeach
                  </tbody>
              </table>
          </div>
      </div>

  <!--End Events Attending  -->
