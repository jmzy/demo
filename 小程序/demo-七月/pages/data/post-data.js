var local_database = [{
    author: '../img/touxiang/1.jpg',
    date: 'Oct 3 2018',
    title: '型号: D80',
    postImg: '../img/post/1.jpg',
    content: '数码单镜反光相机（Digital Single Lens Reflex Camera，常简称为DSLR），简称数码单反相机是一种以数码方式记录成像的照相机。属于数码静态相机（Digital Still Camera, DSC）',
    storeUpImg: '../img/icon/storeUp.png',
    storeUp: 11,
    msgImg: '../img/icon/msg.png',
    msg: 22
  },
  {
    author: '../img/touxiang/2.jpg',
    date: 'Oct 4 2018',
    title: '型号: D92',
    postImg: '../img/post/2.jpg',
    content: '数码单镜反光相机（Digital Single Lens Reflex Camera，常简称为DSLR），简称数码单反相机是一种以数码方式记录成像的照相机。属于数码静态相机（Digital Still Camera, DSC）',
    storeUpImg: '../img/icon/storeUp.png',
    storeUp: 5,
    msgImg: '../img/icon/msg.png',
    msg: 33
  },
  {
    author: '../img/touxiang/1.jpg',
    date: 'Oct 5 2018',
    title: '型号: D92',
    postImg: '../img/post/3.jpg',
    content: '数码单镜反光相机（Digital Single Lens Reflex Camera，常简称为DSLR），简称数码单反相机是一种以数码方式记录成像的照相机。属于数码静态相机（Digital Still Camera, DSC）',
    storeUpImg: '../img/icon/storeUp.png',
    storeUp: 5,
    msgImg: '../img/icon/msg.png',
    msg: 33
  }
];

for (var i= 0; i< local_database.length; i++){
  local_database[i].postid = i
}

module.exports = {
  postList : local_database
}