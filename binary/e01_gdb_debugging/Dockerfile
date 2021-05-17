ARG FLAG supersecret
FROM centos:7
ARG SECRET supersecret
ARG PORT 4701
ARG FLAG
ENV _PORT=${PORT}
COPY exercise.c Makefile /root/
WORKDIR /root/
#RUN yum groupinstall "Development Tools" -y
RUN yum install gcc make a -y
RUN yum install socat -y
RUN echo {$SECRET} > /flag
RUN make bin
ENTRYPOINT while true; do socat TCP-LISTEN:$_PORT,fork,reuseaddr, exec:"/root/exercise",stderr; sleep 1; done
