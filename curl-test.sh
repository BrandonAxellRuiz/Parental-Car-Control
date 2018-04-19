#!/bin/bash
curl -X POST -H "Authorization: key=  " -H "Content-Type: application/json" \
   -d '{
  "data": {
    "notification": {
        "title": "FCM Message",
        "body": "This is an FCM Message",
        "icon": "/itwonders-web-logo.png",
    }
  },
  "to": "f295aL4bTVQ:APA91bGNOMYO9IK-HY_mViiP7PqZnOLj_P6jBawN5M8PNuTiRkoiqHHTF_zMGbPg3SV_69GnhlcXTYnbqoGB1dWKTH3oJCkR5odEy4eaq0bSb4D8Su-SMCG78yBTOKDDOXgcvHctB1G2"
}' https://fcm.googleapis.com/fcm/send
