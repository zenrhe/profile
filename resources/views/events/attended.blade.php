<!-- Events Attended-->
      <div class="card-block">
          <div class="table-responsive">
            <h4 class="card-block__title mb-4">Upcoming Events</h4>
              <table id="data-table" class="table table-bordered .table-striped" >
                  <thead class="thead-default">
                      <tr>
                          <th>Event Name</th>
                          <th>Location</th>
                          <th>Venue</th>
                          <th>Dates</th>
                      </tr>
                  </thead>
                  <tfoot>
                      <tr>
                        <th>Event Name</th>
                        <th>Location</th>
                        <th>Venue</th>
                        <th>Dates</th>
                      </tr>
                  </tfoot>
                  <tbody>
                    <!--TO DO: Only show past events this profile is marked as attending -->
                      @foreach($events as $event)
                          <tr>
                              <td>{{ $event->title}}</td>
                              <td>{{ $event->city}}</td>
                              <td>{{ $event->venue}}</td>
                              <td>
                              {{ date('M d', strtotime($event->startDate)) }} -
                              {{ date('M d, y', strtotime($event->endDate)) }}
                            </td>
                          </tr>
                          @endforeach
                  </tbody>
              </table>
          </div>
      </div>
<!--End Events Attended -->
