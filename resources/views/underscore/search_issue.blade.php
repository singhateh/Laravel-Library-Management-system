<div class="" style="background:#0C2876; color:#fff"><center>Book Details</center></div>
<dl class="dl-horizontal">
    <dt>Book Name</dt>
    <dd><%= obj.book_name %></dd>
    <dt>Author</dt>
    <dd><%= obj.author %></dd>
    <dt>Book Category</dt>
    <dd><%= obj.category %></dd>
    <dt>Available Status</dt>
    <dd><%= obj.available_status %></dd>
    <dt>Date of addition</dt>
    <dd><%= obj.updated_at %></dd>
</dl>

<%
    if(obj.hasOwnProperty('student')){
%>
<div class="" style="background:#0C2876; color:#fff"><center>Student Details</center></div>
<dl class="dl-horizontal">
    <dt>Student ID</dt>
    <dd><%= obj.student.student_id %></dd>
    <dt>Student Name</dt>
    <dd><%= obj.student.first_name %> <%= obj.student.last_name %></dd>
    <dt>Student Category</dt>
    <dd><%= obj.student.category %></dd>
    <dt>Roll Number</dt>
    <dd><%= obj.student.roll_num %></dd>
</dl>
<%
    }
%>
