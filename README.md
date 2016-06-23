# Caketranslate
Translation of texts with a CakePHP plugin.

<h2>Requirements</h2>

HTTP Server. For example: Apache.
PHP 5.2.8 or greater.
CakePHP 2.5.1+

<h2>Installation</h2>

- upload plugin in the /app/Plugin/Caketranslate folder
- activate the plugin in /app/Config/bootstrap.php

CakePlugin::load(array( 

	'Caketranslate' => array('routes' => true) 
	
));

<h3>In the controller</h3>

public $helpers = array('Caketranslate.Caketranslate');

<h3>In the View</h3>

<?php echo $this->Caketranslate->translate('Chi siamo'); ?>

<h2>License</h2>

MIT LICENSE

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.
