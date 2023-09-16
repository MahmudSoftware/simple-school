 <div id="sidebar-menu" class="main_menu_side hidden-print main_menu" class="hidden-print">
    <div class="menu_section">
        <h3>User Panel</h3>
        <ul class="nav side-menu">
            <li><a><i class="fa fa-home"></i> Student Setup <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="{{ url('/StudentCreate')}}">Student Entry</a></li>
                    <li><a href="{{ url('/StudentList')}}">Student List</a></li>
  <li><a href="{{ url('/StudentSalary')}}">Student's Fee</a></li>
  <li><a href="{{ url('/ViewStudentSalaryList')}}">View Student's Fee List</a></li>
  <li><a href="{{ url('/StudentAttentest')}}">Student Attentest</a></li>
   <li><a href="{{ url('/ViewAttentest')}}">View Attentest</a></li>

                </ul>
            </li>

            <li><a><i class="fa fa-desktop"></i> Teacher Setup <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="{{ url('/TeacherEntry')}}">Teacher Entry</a></li>
                    <li><a href="{{ url('/TeacherList')}}">Teacher List</a></li>
                    <li><a href="{{ url('/NoticesBord')}}">Notices Bord</a></li>
                    <li><a href="{{ url('/ViewNoticesBord')}}">View Notices Bord</a></li>
                    <li><a href="{{ url('/CreateAdmitCard')}}">Create Admit Card</a></li>
                    <li><a href="{{ url('/AdmitCardList')}}"> Admit Card List</a></li>
                    <li><a href="{{ url('/CreateIDCard') }}">Create ID Card</a></li>
                    <li><a href="{{ url('/CreateQ') }}">Create Q</a></li>
                    <li><a href="{{ url('/CreateSeatPlan') }}">Create Seat Plan</a></li>
                    <li><a href="{{ url('/ViewSeatPlan') }}">View Seat Plan</a></li>
                
                    
                </ul>
            
    

            <li><a><i class="fa fa-desktop"></i>Student's Marksheet <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="{{ url('/StudentsMark')}}">Student's Mark Sheet Create</a></li>
                    <li><a href="{{ url('/ViewStudentsMarkList')}}">View Student's Mark</a></li>
                    
                   
                </ul>
            </li>   


            <li>
            <a><i class="fa fa-desktop"></i> Extra Setup <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="{{ url('/StudentSubject') }}">Create Subject</a></li>
                    <li><a href="{{ url('/SubjectList') }}">Subject List</a></li>
                    <li><a href="{{ url('/ExamType') }}">Exam Type Create</a></li>
                    <li><a href="{{ url('/ExamTypeList') }}">Exam Type List</a></li>
                    <li><a href="{{ url('/RoomCreate') }}">Room Create</a></li>
                    <li><a href="{{ url('/ViewRoom') }}">View Room</a></li>


                    <li><a href="{{ url('/ClassCreate') }}">Create Class</a></li>
                    <li><a href="{{ url('/ViewClass') }}">View Class</a></li>
                   
                   
                </ul>
            </li>

            <li>
            <a><i class="fa fa-desktop"></i> School's Expence <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="{{ url('/SchoolExpenceEntry') }}">School's Expence Entry</a></li>
                    <li><a href="{{ url('/SchoolExpenceList') }}">School's Expence List</a></li>
                    <li><a href="{{ url('/CreateSection') }}">Ctreate  Section</a></li>
                    <li><a href="{{ url('/ViewSection') }}">View Section</a></li>
                   
                </ul>
            </li>

            

        </ul>
    </div>
</div> 