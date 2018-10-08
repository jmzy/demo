var post = require('../data/post-data.js');

Page({
  onLoad: function(options) {
    var postId = options.id;
    this.setData({
      postData : post.postList[postId]
    })
  }
})