const express = require('express');
const app = express();
app.get('/api/artworks', (req, res) => {
  res.json([{ title: 'Sunset', artist: 'Jane Doe' }]);
});
app.listen(3000, () => console.log('Node API running'));