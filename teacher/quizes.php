<?php include "header.php"; ?>
  <div id="admin-content">
      <div class="container">
          <div class="row">
              <div class="col-md-10">
                  <h1 class="admin-heading">All Quizes</h1>
              </div>
              <div class="col-md-2">
                  <a class="add-new" href="#">add Quiz</a>
              </div>
              <div class="col-md-12">
                  <table class="content-table">
                      <thead>
                          <th>S.No.</th>
                          <th>Title</th>
                          <th>Course</th>
                          <th>Date</th>
                          <th>Teacher</th>
                          <th>Edit</th>
                          <th>Delete</th>
                      </thead>
                      <tbody>
                          <tr>
                              <td class='id'>1</td>
                              <td>Quiz on html</td>
                              <td>Html</td>
                              <td>22 march, 2019</td>
                              <td>pqrs</td>
                              <td class='edit'><a href="#"><i class='fa fa-edit'></i></a></td>
                              <td class='delete'><a href='#'><i class='fa fa-trash-o'></i></a></td>
                          </tr>
                          <tr>
                              <td class='id'>2</td>
                              <td>php quiz</td>
                              <td>php</td>
                              <td>01 Nov, 2019</td>
                              <td>abcd</td>
                              <td class='edit'><a href="#"><i class='fa fa-edit'></i></a></td>
                              <td class='delete'><a href='#'><i class='fa fa-trash-o'></i></a></td>
                          </tr>
                          <tr>
                              <td class='id'>3</td>
                              <td>python quiz</td>
                              <td>python</td>
                              <td>17 Oct, 2018</td>
                              <td>xyz</td>
                              <td class='edit'><a href="#"><i class='fa fa-edit'></i></a></td>
                              <td class='delete'><a href='#'><i class='fa fa-trash-o'></i></a></td>
                          </tr>
                          <tr>
                              <td class='id'>4</td>
                              <td>Css quiz -2</td>
                              <td>Css</td>
                              <td>12 Dec, 2020</td>
                              <td>mnop</td>
                              <td class='edit'><a href="#"><i class='fa fa-edit'></i></a></td>
                              <td class='delete'><a href='#'><i class='fa fa-trash-o'></i></a></td>
                          </tr>
                          <tr>
                              <td class='id'>5</td>
                              <td>Quiz for java students</td>
                              <td>Java</td>
                              <td>06 July, 2019</td>
                              <td>uvw</td>
                              <td class='edit'><a href="#"><i class='fa fa-edit'></i></a></td>
                              <td class='delete'><a href='#'><i class='fa fa-trash-o'></i></a></td>
                          </tr>
                         
                         
                             
                            
                      </tbody>
                  </table>
                  <ul class='pagination admin-pagination'>
                      <li class="active"><a>1</a></li>
                      <li><a>2</a></li>
                      <li><a>3</a></li>
                  </ul>
              </div>
          </div>
      </div>
  </div>
<?php include "footer.php"; ?>
