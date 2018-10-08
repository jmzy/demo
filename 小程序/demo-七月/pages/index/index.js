var postData = require('../data/post-data.js');

const app = getApp()

Page({
  data: {

  },
  onLoad: function(options) {
    // this.data.postkey = postData.postList
    this.setData({
      postkey : postData.postList
    })
  },
  onPostItem:function(event){
    var postId = event.currentTarget.dataset.postid;
    wx.navigateTo({
      url: '../post-item/post-datail?id=' + postId
    })
  }
})