## FEDN.it

### 当前服务器运营环境：
- 操作系统： CentOS 6.8 x86_64
- WEB环境： Nginx 1.12.0 + php-fpm
- PHP环境： PHP 7.1
  - Zend OPcache
  - apc
  - apcu
  - pdo_mysql
  - redis
  - openssl
  - ...
- 数据库：
  - MariaDB 10.0.30
  - Redis 3.2.6
- Node环境：Nodejs 6.10.3


**特别提醒**:

- `master` 分支为保护分支，禁止向其提交代码
- `dev` 分支为开发阶段的主分支，测试无误的代码提交后可以合并到该分支
- 开发过程中请在本地自建开发分支进行开发和测试，测试完毕后合并到 `dev` 分支再push


有关本地环境配置、开发注意事项、代码规范等更多参考资料，请参见[项目wiki](http://git.oschina.net/krwu/fedn.it/wikis/home)

如果有任何问题，随时可以骚扰 kairee.

