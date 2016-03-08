require('normalize.css');
require('styles/App.css');
require('styles/less/app.less')

import React from 'react';

let yeomanImage = require('../images/yeoman.png');

class AppComponent extends React.Component {
  render() {
    return (
      <div className="index">
        <img src={yeomanImage} alt="Yeoman Generator" />
        <button className="ui button">
  		Follow
		</button>
        <div className="notice">Please edit <code>src/components/Main.js</code> to get started! fffxixixff</div>
      </div>
    );
  }
}

AppComponent.defaultProps = {
};

export default AppComponent;
