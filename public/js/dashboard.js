


    $(window).scroll(function() {
        if ($(this).scrollTop() > 200) { // Adjust the scroll value as needed
            $('.navbar').addClass('scrolled');
            $('.social-bottom').addClass('scrolled')
        } else {
            $('.navbar').removeClass('scrolled');
            $('.social-bottom').removeClass('scrolled');
        }
    });




const dashboardToggle = document.getElementById('dashboard-toggler');
const dashboardSidebar = document.getElementById('dashboard-sidebar');
const dashboardBody = document.getElementById('dashboard-body');
const dashboardToggleIcon = document.getElementById('dashboard-toggleIcon');
const dashboardToggleIconSide = document.getElementById('dashboard-toggleIconside');

dashboardToggleIconSide.addEventListener('click', () => {
  
  if (dashboardSidebar.classList.contains('active')) {
      console.log('working');
      dashboardSidebar.classList.remove('active');
      dashboardBody.classList.remove('active');
      dashboardToggleIcon.classList.add('fa-bars');
      dashboardToggleIcon.classList.remove('fa-arrow-left-long');
 
    } else {
      console.log('working');
      dashboardSidebar.classList.add('active');
      dashboardBody.classList.add('active');
      dashboardToggleIcon.classList.remove('fa-bars');
      dashboardToggleIcon.classList.add('fa-arrow-left-long');
    }
});
dashboardToggle.addEventListener('click', () => {
  
  if (dashboardSidebar.classList.contains('active')) {
      console.log('working');
      dashboardSidebar.classList.remove('active');
      dashboardBody.classList.remove('active');
      dashboardToggleIcon.classList.add('fa-bars');
      dashboardToggleIcon.classList.remove('fa-arrow-left-long');
 
    } else {
      console.log('working');
      dashboardSidebar.classList.add('active');
      dashboardBody.classList.add('active');
      dashboardToggleIcon.classList.remove('fa-bars');
      dashboardToggleIcon.classList.add('fa-arrow-left-long');
    }
});


/* const sendMessageModel = document.getElementById('send-messageModel');
const model = document.getElementById('model');
const closeModel = document.getElementById('closeModel');



sendMessageModel.addEventListener('click', () => {
    model.classList.add('active');
});
closeModel.addEventListener('click', () => {
    model.classList.remove('active');
});
 */




deleteBtn = document.getElementById('delete-btn');

const checkboxes = document.querySelectorAll('input[name="selectedItems[]"]');

checkboxes.forEach(checkbox => {
    checkbox.checked = this.checked;


});


document.getElementById('checkAll').addEventListener('change', function () {

    checkboxes.forEach(checkbox => {
        checkbox.checked = this.checked;
    
    
    });
 
    if (deleteBtn.classList.contains('hidden')) {

        deleteBtn.classList.add('flex');
        deleteBtn.classList.remove('hidden');
   
      }else{
        deleteBtn.classList.add('hidden');
        deleteBtn.classList.remove('flex');
      }
});