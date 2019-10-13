const cloudName = 'severenity';
const unsignedUploadPreset = 'fh1fiumb';

// var fileSelect = document.getElementById("fileSelect"),
//   fileElem = document.getElementById("fileElem");

// fileSelect.addEventListener("click", function(e) {
//   if (fileElem) {
//     fileElem.click();
//   }
//   e.preventDefault(); // prevent navigation to "#"
// }, false);

// ************************ Drag and drop ***************** //
function dragenter(e) {
  e.stopPropagation();
  e.preventDefault();
}

function dragover(e) {
  e.stopPropagation();
  e.preventDefault();
}

dropbox = document.getElementById("dropbox");
dropbox.addEventListener("dragenter", dragenter, false);
dropbox.addEventListener("dragover", dragover, false);
dropbox.addEventListener("drop", drop, false);

function drop(e) {
  e.stopPropagation();
  e.preventDefault();

  var dt = e.dataTransfer;
  var files = dt.files;

  handleFiles(files);
}

// *********** Upload file to Cloudinary ******************** //
function uploadFile(file, status) {
  var url = 'https://api.cloudinary.com/v1_1/severenity/image/upload/'
  var xhr = new XMLHttpRequest();
  var fd = new FormData();
  xhr.open('POST', url, true);
  xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
  // Reset the upload progress bar
   $('#blah').attr('status', 'wait')
  
  // Update progress (can be used to show progress indicator)

  xhr.onreadystatechange = function(e) {
    if (xhr.readyState == 4 && xhr.status == 200) {
      // File uploaded successfully
      var response = JSON.parse(xhr.responseText);
      // https://res.cloudinary.com/cloudName/image/upload/v1483481128/public_id.jpg
      var url = response.secure_url;
      // Create a thumbnail of the uploaded image, with 150px width
      var tokens = url.split('/');
      var img = new Image(); // HTML5 Constructor
      img.src = tokens.join('/');
      img.alt = response.public_id;
      console.log(response, img)
      $('#blah').attr('src', url)
      $('#blah').attr('status', 'ready')
      if (status != undefined) {
          status.resolve();
          console.log('status resolved')
      }
      
    }
  };

  fd.append('upload_preset', unsignedUploadPreset);
  fd.append('tags', 'browser_upload'); // Optional - add tag for image admin in Cloudinary
  fd.append('file', file);
  fd.append('folder', 'builder_platform');
  //fd.append('eager', 'w_260,h_200,c_crop');
  xhr.send(fd);
  return $.when(status).done(function(){
        console.log('done in upload');
    }).promise();
}

// *********** Handle selected files ******************** //
var handleFiles = function(files, status) {

  for (var i = 0; i < files.length; i++) {

    if (i == files.length - 1) {
        uploadFile(files[i], status)
    }else{
        uploadFile(files[i])
    }

  }
  return $.when(status).done(function(){
        console.log('done in handle');
    }).promise();
};


function handleFilesfunc(files, status) {
  console.log('inside')
  for (var i = 0; i < files.length; i++) {

    if (i == files.length - 1) {
        uploadFile(files[i], status)
    }else{
        uploadFile(files[i])
    }

  }
  console.log('out')
  return $.when(status).done(function(){
        console.log('done in handle');
    }).promise();
};

// upload image

// *********** Upload file to Cloudinary ******************** //
function uploadAudio(file, status) {
  var url = 'https://api.cloudinary.com/v1_1/severenity/video/upload/'
  var xhr = new XMLHttpRequest();
  var fd = new FormData();
  xhr.open('POST', url, true);
  xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
  // Reset the upload progress bar
    document.getElementById('progress-bar').style.width = '100%';
   document.getElementById('progress').style.width = 0;
   $('#blah').attr('status', 'wait')

  
  // Update progress (can be used to show progress indicator)
  xhr.upload.addEventListener("progress", function(e) {
    var progress = Math.round((e.loaded * 100.0) / e.total);
    document.getElementById('progress').style.width = progress + "%";

    console.log(`audio! fileuploadprogress data.loaded: ${e.loaded},
  data.total: ${e.total}`);
  });

  xhr.onreadystatechange = function(e) {
    if (xhr.readyState == 4 && xhr.status == 200) {
      // File uploaded successfully
      var response = JSON.parse(xhr.responseText);
      // https://res.cloudinary.com/cloudName/image/upload/v1483481128/public_id.jpg
      var url = response.secure_url;
      // Create a thumbnail of the uploaded image, with 150px width
      var tokens = url.split('/');
      var img = new Image(); // HTML5 Constructor
      img.src = tokens.join('/');
      img.alt = response.public_id;
      console.log(response, img)
      $('#blah').attr('path', response.secure_url)
      if (status != undefined) {
          status.resolve();
          console.log('status resolved')
      }
      
    }
  };

  fd.append('upload_preset', unsignedUploadPreset);
  fd.append('tags', 'browser_upload'); // Optional - add tag for image admin in Cloudinary
  fd.append('resource_type', 'video');
  fd.append('file', file);
  fd.append('folder', 'builder_platform');
  //fd.append('eager', 'w_260,h_200,c_crop');
  xhr.send(fd);
  return $.when(status).done(function(){
        console.log('done in upload');
    }).promise();
}

function handleAudio(files, status) {
  console.log('inside')
  for (var i = 0; i < files.length; i++) {

    if (i == files.length - 1) {
        uploadAudio(files[i], status)
    }else{
        uploadAudio(files[i])
    }

  }
  console.log('out')
  return $.when(status).done(function(){
        console.log('done in handle');
    }).promise();
};

// image

function uploadImage(file, status) {
  var url = 'https://api.cloudinary.com/v1_1/severenity/image/upload/'
  var xhr = new XMLHttpRequest();
  var fd = new FormData();
  xhr.open('POST', url, true);
  xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
  // Reset the upload progress bar
   $('#blah').attr('status', 'wait')
  
  // Update progress (can be used to show progress indicator)

  xhr.onreadystatechange = function(e) {
    if (xhr.readyState == 4 && xhr.status == 200) {
      // File uploaded successfully
      var response = JSON.parse(xhr.responseText);
      // https://res.cloudinary.com/cloudName/image/upload/v1483481128/public_id.jpg
      var url = response.secure_url;
      // Create a thumbnail of the uploaded image, with 150px width
      var tokens = url.split('/');
      var img = new Image(); // HTML5 Constructor
      img.src = tokens.join('/');
      img.alt = response.public_id;
      console.log(response, img)
      $('#blah').attr('path', url)
      $('#blah').attr('status', 'ready')
      if (status != undefined) {
          status.resolve();
          console.log('status resolved')
      }
      
    }
  };

  fd.append('upload_preset', unsignedUploadPreset);
  fd.append('tags', 'browser_upload'); // Optional - add tag for image admin in Cloudinary
  fd.append('file', file);
  fd.append('folder', 'builder_platform');
  //fd.append('eager', 'w_260,h_200,c_crop');
  xhr.send(fd);
  return $.when(status).done(function(){
        console.log('done in upload');
    }).promise();
}

function handleImage(files, status) {
  console.log('inside')
  for (var i = 0; i < files.length; i++) {

    if (i == files.length - 1) {
        uploadImage(files[i], status)
    }else{
        uploadImage(files[i])
    }

  }
  console.log('out')
  return $.when(status).done(function(){
        console.log('done in handle');
    }).promise();
};





