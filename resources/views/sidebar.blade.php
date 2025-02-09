<div class="sidebar">
    <div class="profile">
        <img src="{{asset('img/KU.png')}}" alt="Logo">
        <h2>EDGE</h2>
    </div>
    <ul class="menu">
        {{-- <li><a href="{{url('/')}}"><i class="fa-solid fa-gauge-high">Dashboard</i></a></li> --}}
        <li><a href="{{url('/')}}"><i style="color: yellow; margin: 5px" class="fa-solid fa-house"></i>Home</a></li>
        <li><a href="{{url('/academic_session')}}"><i style="color: yellow; margin: 5px" class="fa-solid fa-calendar"></i> Academic Session</a></li>
        <li><a href="{{url('/department')}}"><i style="color: yellow; margin: 5px" class="fa-solid fa-building-columns"></i> Department</a></li>
        <li><a href="{{url('/subjects')}}"><i style="color: yellow; margin: 5px" class="fa-solid fa-book-open"></i> Subjects</a></li>
        <li><a href="{{url('/students')}}"><i style="color: yellow; margin: 5px" class="fa-solid fa-user-graduate"></i> Students</a></li>
        <li><a href="{{url('/student_subject')}}"><i style="color: yellow; margin: 5px"  class="fa-solid fa-user-plus"></i> Student Registrations</a></li>
        <li><a href="{{url('/teachers')}}"><i style="color: yellow; margin: 5px"   class="fa-solid fa-chalkboard-teacher"></i>Teachers</a></li>
        <li><a href="{{url('/teacher_subjects')}}"><i style="color: yellow; margin: 5px"   class="fa-solid fa-chalkboard-teacher"></i>Teacher Subjects</a></li>
    </ul>
</div>
